<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Task Manager')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 2rem 1rem;
            min-height: 100vh;
            color: #1e293b;
        }
        .container {
            max-width: 720px;
            margin: 0 auto;
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        h1 {
            margin: 0;
            font-size: 1.9rem;
            font-weight: 700;
            letter-spacing: -0.02em;
        }
        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.75rem;
            padding-bottom: 1.25rem;
            border-bottom: 1px solid #e2e8f0;
        }
        a {
            color: #6366f1;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.15s ease;
        }
        a:hover {
            color: #4f46e5;
        }
        .add-task-link {
            background: #6366f1;
            color: #fff !important;
            padding: 0.6rem 1.1rem;
            border-radius: 8px;
            font-size: 0.9rem;
        }
        .add-task-link:hover {
            background: #4f46e5;
        }
        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
            color: #94a3b8;
            font-size: 0.95rem;
        }
        .task-card {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            margin-bottom: 0.9rem;
            transition: box-shadow 0.15s ease, border-color 0.15s ease;
        }
        .task-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }
        .task-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 1rem;
        }
        .task-title {
            font-size: 1.05rem;
            font-weight: 600;
            color: #0f172a;
        }
        .task-meta {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            margin-top: 0.35rem;
            flex-wrap: wrap;
        }
        .due-date {
            font-size: 0.8rem;
            color: #64748b;
        }
        .task-description {
            margin: 0.6rem 0 0;
            font-size: 0.9rem;
            color: #475569;
            line-height: 1.5;
        }
        .status {
            display: inline-block;
            padding: 0.25rem 0.7rem;
            border-radius: 999px;
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }
        .status.Pending {
            background: #fef3c7;
            color: #92400e;
        }
        .status.Completed {
            background: #d1fae5;
            color: #065f46;
        }
        .actions {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-shrink: 0;
        }
        .actions form {
            display: inline;
        }
        .actions .edit-link {
            font-size: 0.85rem;
        }
        .btn-delete {
            background: #fee2e2;
            color: #b91c1c;
            border: none;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.15s ease;
        }
        .btn-delete:hover {
            background: #fecaca;
        }
        form label {
            display: block;
            margin-bottom: 0.4rem;
            font-weight: 600;
            font-size: 0.85rem;
            color: #334155;
        }
        form input[type="text"],
        form input[type="date"],
        form textarea,
        form select {
            width: 100%;
            padding: 0.65rem 0.85rem;
            margin-bottom: 1.25rem;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
            color: #1e293b;
            transition: border-color 0.15s ease, box-shadow 0.15s ease;
        }
        form input:focus,
        form textarea:focus,
        form select:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99,102,241,0.15);
        }
        button[type="submit"] {
            background: #6366f1;
            color: #fff;
            border: none;
            padding: 0.7rem 1.4rem;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.15s ease;
        }
        button[type="submit"]:hover {
            background: #4f46e5;
        }
        form > a {
            margin-left: 0.75rem;
            font-size: 0.9rem;
            color: #64748b;
        }
        .error {
            color: #dc2626;
            font-size: 0.8rem;
            margin-top: -1rem;
            margin-bottom: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>