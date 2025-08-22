<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">CRM Dashboard</div>
        <div class="header-actions">
            <button class="btn btn-secondary" onclick="openStageSettings()">Stage Settings</button>
            <button class="btn btn-primary" onclick="openAddProject()">+ Add Project</button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
       @include('kanbanBoard')
    </main>

    <!-- Add Project Modal -->
   @include('makeproject')

    <!-- Stage Settings Modal -->
    @include('stageSettings', ['stages' => $stages])
    <script src="js/main.js"></script>
 
</html>
