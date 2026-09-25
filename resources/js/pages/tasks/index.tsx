import { Head, Link, router } from '@inertiajs/react';

interface Task {
    id: number;
    title: string;
    description: string | null;
    completed: boolean;
}

interface Props {
    tasks: Task[];
}

export default function Index({ tasks }: Props) {
    const handleDelete = (id: number) => {
        if (confirm('Are you sure you want to delete this task?')) {
            router.delete(`/tasks/${id}`);
        }
    };

    return (
        <>
            <Head title="Tasks" />
            <div style={{ padding: '2rem', maxWidth: '700px', margin: '0 auto' }}>
                <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center' }}>
                    <h1>Tasks</h1>
                    <Link href="/tasks/create">+ Add Task</Link>
                </div>

                {tasks.length === 0 && <p>No tasks yet.</p>}

                <ul style={{ listStyle: 'none', padding: 0 }}>
                    {tasks.map((task) => (
                        <li
                            key={task.id}
                            style={{
                                border: '1px solid #ccc',
                                borderRadius: '8px',
                                padding: '1rem',
                                marginBottom: '0.75rem',
                            }}
                        >
                            <div style={{ display: 'flex', justifyContent: 'space-between' }}>
                                <div>
                                    <strong style={{ textDecoration: task.completed ? 'line-through' : 'none' }}>
                                        {task.title}
                                    </strong>
                                    {task.description && <p>{task.description}</p>}
                                </div>
                                <div style={{ display: 'flex', gap: '0.5rem' }}>
                                    <Link href={`/tasks/${task.id}/edit`}>Edit</Link>
                                    <button onClick={() => handleDelete(task.id)}>Delete</button>
                                </div>
                            </div>
                        </li>
                    ))}
                </ul>
            </div>
        </>
    );
}