<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use App\Http\Resources\MeetingResource;
use App\Http\Requests\StoreMeetingRequest;
use App\Http\Requests\UpdateMeetingRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;

class MeetingController extends Controller
{
    public function index()
    {
        $meetings = Meeting::latest()->paginate(10);
        return MeetingResource::collection($meetings);
    }

    public function store(StoreMeetingRequest $request)
    {
        $data = $request->validated();
        $startTime = Carbon::createFromFormat('h:i A', $data['start_time']);
        $duration = (int) filter_var($data['duration'], FILTER_SANITIZE_NUMBER_INT);
        $endTime = $startTime->copy()->addMinutes($duration);
        $data['end_time'] = $endTime->format('h:i A');

        $meeting = Meeting::create($data);

        return new MeetingResource($meeting);
    }

    public function show(Meeting $meeting)
    {
        return new MeetingResource($meeting);
    }

    public function update(UpdateMeetingRequest $request, $id)
    {
        $data = $request->validated();
        $meeting = Meeting::find($id);
        if (!$meeting) {
            throw new NotFoundHttpException("Meeting with id {$id} not found.");
        }
        if (!empty($data['start_time']) && !empty($data['duration'])) {
        $startTime = Carbon::createFromFormat('h:i A', $data['start_time']);
        $duration = (int) filter_var($data['duration'], FILTER_SANITIZE_NUMBER_INT);
        $endTime = $startTime->copy()->addMinutes($duration);
        $data['end_time'] = $endTime->format('h:i A');
       }
        $meeting->update($data);
        return new MeetingResource($meeting);
    }

    public function destroy(Meeting $meeting)
    {
        $meeting->delete();

        return response()->json([
            'message' => 'Meeting deleted successfully'
        ], 200);
    }

     public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Scheduled,Rescheduled,In Progress,Completed',
        ]);

        $meeting = Meeting::find($id);

        if (!$meeting) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Meeting not found',
                'data'    => null,
            ], Response::HTTP_NOT_FOUND);
        }

        $meeting->status = $request->status;
        $meeting->save();

        return response()->json([
            'status'  => 'success',
            'message' => 'Meeting status updated successfully',
            'data'    => new MeetingResource($meeting),
        ], Response::HTTP_OK);
    }
}
