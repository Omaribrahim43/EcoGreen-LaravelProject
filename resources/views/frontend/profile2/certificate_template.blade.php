<!DOCTYPE html>
<html>

<head>
    <style>
        /* Certificate Styles */
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 4px solid #239e44;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .certificate-header {
            text-align: center;
            background-color: #158b3a;
            padding: 10px 0;
        }

        .certificate-title {
            font-size: 28px;
            color: #fff;
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
            border: 2px solid #0ca152;
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

        img {
            display: block;
            margin: 20px auto;
            max-width: 150px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="certificate-header">
            <h1 class="certificate-title">Certificate of Participation</h1>
        </div>

        <div class="certificate-content">
            <p>This is to certify that <strong>{{ $user->name }}</strong> has participated in the following projects:
            </p>
            <ul class="project-list">
                @foreach ($projects as $project)
                    @if ($amounts[$project->id] > 0)
                        <li class="project-item">
                            <div class="project-title">{{ $project->title }}</div>
                            <div class="project-location">Location: {{ $project->location }}</div>
                            <div class="project-description">Description: {{ $project->long_description }}</div>
                            <div class="project-info">
                                <p><strong>Amount Donated:</strong> JD{{ $amounts[$project->id] }}</p>
                                <p><strong>Start Date:</strong> {{ $project->start_day }}</p>
                                <p><strong>End Date:</strong> {{ $project->end_day }}</p>
                                <p><strong>Volunteering Days:</strong> {{ $project->volunteering_days }}</p>
                                <img src="{{ public_path('frontend/images/logo/green_hands_logo-removebg-preview.png') }}"
                                    alt="Logo" style="text-align: center">

                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</body>

</html>
