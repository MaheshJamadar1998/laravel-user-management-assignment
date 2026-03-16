<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management API | Documentation</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        .api-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .method-badge {
            width: 70px;
            text-align: center;
            font-weight: bold;
        }
        .endpoint-link {
            font-family: 'Courier New', Courier, monospace;
            color: #0d6efd;
            text-decoration: none;
            transition: color 0.2s;
        }
        .endpoint-link:hover {
            color: #0a58ca;
            text-decoration: underline;
        }
        .status-dot {
            height: 10px;
            width: 10px;
            background-color: #198754;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.4; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            
            <div class="text-center mb-5">
                <h1 class="fw-bold text-dark">User Management API</h1>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <span class="status-dot"></span>
                    <span class="text-success fw-semibold">API Status: Running</span>
                </div>
            </div>

            <div class="card api-card p-4">
                <div class="card-body">
                    <h5 class="card-title mb-4 fw-semibold text-secondary">Available Endpoints</h5>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 15%;">Method</th>
                                    <th scope="col" style="width: 40%;">Endpoint</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge bg-success method-badge">POST</span></td>
                                    <td><a href="/api/users" class="endpoint-link">/api/users</a></td>
                                    <td class="text-muted">Create a new user record</td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-warning text-dark method-badge">PUT</span></td>
                                    <td><a href="/api/users/1" class="endpoint-link">/api/users/{id}</a></td>
                                    <td class="text-muted">Update existing user information</td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-primary method-badge">GET</span></td>
                                    <td><a href="/api/users/1" class="endpoint-link">/api/users/{id}</a></td>
                                    <td class="text-muted">Retrieve specific user details</td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-danger method-badge">DELETE</span></td>
                                    <td><a href="/api/users/1" class="endpoint-link">/api/users/{id}</a></td>
                                    <td class="text-muted">Remove a user from the database</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 text-muted small">
                <p>Laravel Version: <span class="fw-bold">{{ app()->version() }}</span></p>
                <p class="mb-0">&copy; 2026 Assignment Project • Documentation</p>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.min.js"></script>
</body>
</html>