<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AnnounceProject;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function announceProject(Request $request)
    {


        $validator = Validator::make($request->toArray(), [
            'project_title' => 'required',
            "country" => "required",
            "region" => "required",
            "project_announcement_date" => "required",
            "project_closing_date" => "required",
            'project_description' => 'required',
            'show_my_identity' => 'required',
            'general_announcer' => 'required',
            'account_types' => 'required',
            'services' => 'required',
            'expertise_id' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->errors()
            ], 422);
        }
        $user_id  = Auth::user()->id;
        $project  = AnnounceProject::create(
            [
                'project_title' => $request->project_title,
                'country' => $request->country,
                'region' => $request->region,
                'project_announcement_date' => $request->project_announcement_date,
                'project_closing_date' => $request->project_closing_date,
                'project_description' => $request->project_description,
                'show_my_identity' => $request->show_my_identity,
                'general_announcer' => $request->general_announcer,
                'user_id' => $user_id
            ]
        );

        $project = AnnounceProject::find($project->id);
        if (isset($user_id) && (!is_null($user_id))) {
            if ($request->hasFile('files')) {
                $files =  $request->file('files');
                foreach ($files as  $image) {
                    $img_name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $img_name = $img_name . '-'     . time() . '.' . $image->getClientOriginalExtension();
                    $ext =  $image->getClientOriginalExtension();
                    // if ($ext == 'pdf') {
                    // }
                    if ($ext == 'jpeg' || $ext  == 'png' || $ext == 'jpg') {
                        $project->user_project_attachments()->create(
                            [
                                'images' => url('images') . '/' . $img_name,
                                'user_id' => $user_id
                            ]
                        );
                        Image::make($image->getRealPath())->encode(Config::get('img_encode', 'webp'), Config::get('img_quality', 60));
                        $image->move(public_path('images'), $img_name);
                    }
                }
            }

            if ($request->has('services')) {
                foreach ($request->services as $service) {
                    $project->user_project_services()->create(
                        [
                            'service_id' => $service,
                            'user_id' => $user_id
                        ]
                    );
                }
            }

            if ($request->has('expertise_id')) {
                $project->user_project_expertise()->create([
                    'expertise_id' => $request->expertise_id,
                    'user_id' => $user_id
                ]);
            }
            if ($request->has('account_types')) {
                foreach ($request->account_types as $account_type) {
                    $project->user_project_accountType()->create(
                        [
                            'account_type_id' => $account_type,
                            'user_id' => $user_id
                        ]
                    );
                }
            }
            $data = AnnounceProject::with('user_project_services', 'user_project_expertise', 'user_project_accountType', 'user_project_attachments')->where([['user_id', $user_id], ['id', $project->id]])->first();

            return response()->json([
                'message' => 'announce project detail ',
                'project_details' => $data,
                'status' => 200
            ], 200);
        } else {
            return response()->json(
                [
                    'message' => 'unauthenticated user', 201
                ],
                201
            );
        }
    }
}
