<!-- resources/views/certificate_template.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <style>
        /* Certificate Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #007bff;
            border-radius: 10px;
        }
        .certificate-header {
            text-align: center;
        }
        .certificate-title {
            font-size: 28px;
            color: #333;
            margin: 20px 0;
            text-transform: uppercase;
        }
        .certificate-content {
            font-size: 16px;
            color: #333;
            margin-top: 20px;
        }
        .project-list {
            list-style-type: none;
            padding-left: 0;
        }
        .project-item {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .project-details {
            margin-top: 10px;
        }
        .project-title {
            font-size: 20px;
            font-weight: bold;
        }
        .project-location {
            font-size: 16px;
        }
        .project-description {
            font-size: 14px;
        }
        .project-info {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="certificate-header">
            <h1 class="certificate-title">Certificate of Participation</h1>
        </div>
        <?php 
        use App\Models\UserProject;
                                        use App\Models\User;
                                $id = Auth::id();
                                $user = User::find($id); // Replace $userId with the user's ID
                                
                                $project_ids = UserProject::where('user_id', $id)->pluck('project_id');
                                $projects = Project::whereIn('id', $project_ids)->get();
                                // echo count($projects);
                                        $amounts = [];
                                
                                foreach ($projects as $project) {
                                    $userProjects = UserProject::where('user_id', $id)
                                        ->where('project_id', $project->id)
                                        ->get();
                                    $projectAmount = 0;
                                    foreach ($userProjects as $item) {
                                        $projectAmount += $item->donate_amount;
                                    }
                                    $amounts[$project->id] = $projectAmount;
                                }
        ?>
        <div class="certificate-content">
            <p>This is to certify that <strong>{{ $user->name }}</strong> has participated in the following projects:</p>
            <ul class="project-list">
                @foreach ($projects as $project)
                    <li class="project-item">
                        <div class="project-title">{{ $project->title }}</div>
                        <div class="project-location">Location: {{ $project->location }}</div>
                        <div class="project-description">Description: {{ $project->long_description }}</div>
                        <div class="project-info">
                                                    <td>JD{{ $amounts[$project->id] }}</td>
                            <p><strong>Start Date:</strong> {{ $project->start_day }}</p>
                            <p><strong>End Date:</strong> {{ $project->end_day }}</p>
                            <p><strong>Volunteering Days:</strong> {{ $project->volunteering_days }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
