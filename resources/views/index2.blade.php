<!DOCTYPE html>
<html>
<head>
    <title>R2Technology Frontend</title>
</head>
<body>
    <h1>Welcome to R2Technology</h1>

    <h2>Top Banner</h2>
    <p>{{ $topBanner?->title }}</p>

    <h2>Top Elements</h2>
    <ul>
        @foreach ($topElements as $element)
            <li>{{ $element->title }} - {{ $element->value }}</li>
        @endforeach
    </ul>

    <h2>Top Features</h2>
    <ul>
        @foreach ($topFeatures as $feature)
            <li>{{ $feature->title }} - {{ $feature->description }}</li>
        @endforeach
    </ul>

    <h2>Futures</h2>
    <ul>
        @foreach ($futures as $future)
            <li>{{ $future->title }}</li>
        @endforeach
    </ul>

    <h2>Goals</h2>
    <ul>
        @foreach ($goals as $goal)
            <li>{{ $goal->title }}</li>
        @endforeach
    </ul>

    <h2>Missions</h2>
    <ul>
        @foreach ($missions as $mission)
            <li>{{ $mission->title }}</li>
        @endforeach
    </ul>

    <h2>Projects</h2>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->name }} - {{ $project->budget }}</li>
        @endforeach
    </ul>

    <h2>Our Team</h2>
    <ul>
        @foreach ($teams as $member)
            <li>{{ $member->name }} - {{ $member->designation }}</li>
        @endforeach
    </ul>

    <h2>Why Choose Us</h2>
    <p>{{ $whyChooseUs?->title }}</p>

    <ul>
        @foreach ($whyChooseUsReasons as $reason)
            <li>{{ $reason->title }} - {{ $reason->description }}</li>
        @endforeach
    </ul>
</body>
</html>
