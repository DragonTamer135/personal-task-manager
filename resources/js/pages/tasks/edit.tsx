import { Head, Link, useForm } from '@inertiajs/react';
import { FormEvent } from 'react';

interface Task {
    id: number;
    title: string;
    description: string | null;
    completed: boolean;
}

interface Props {
    task: Task;
}

export default function Edit({ task }: Props) {
    const { data, setData, put, processing, errors } = useForm({
        title: task.title,
        description: task.description ?? '',
        completed: task.completed,
    });

    const handleSubmit = (e: FormEvent) => {
        e.preventDefault();
        put(`/tasks/${task.id}`);
    };

    return (
        <>
            <Head title="Edit Task" />
            <div style={{ padding: '2rem', maxWidth: '600px', margin: '0 auto' }}>
                <h1>Edit Task</h1>

                <form onSubmit={handleSubmit}>
                    <div style={{ marginBottom: '1rem' }}>
                        <label htmlFor="title">Title</label><br />
                        <input
                            id="title"
                            type="text"
                            value={data.title}
                            onChange={(e) => setData('title', e.target.value)}
                            style={{ width: '100%', padding: '0.5rem' }}
                        />
                        {errors.title && <div style={{ color: 'red' }}>{errors.title}</div>}
                    </div>

                    <div style={{ marginBottom: '1rem' }}>
                        <label htmlFor="description">Description</label><br />
                        <textarea
                            id="description"
                            value={data.description}
                            onChange={(e) => setData('description', e.target.value)}
                            style={{ width: '100%', padding: '0.5rem' }}
                            rows={4}
                        />
                        {errors.description && <div style={{ color: 'red' }}>{errors.description}</div>}
                    </div>

                    <div style={{ marginBottom: '1rem' }}>
                        <label>
                            <input
                                type="checkbox"
                                checked={data.completed}
                                onChange={(e) => setData('completed', e.target.checked)}
                            />
                            {' '}Completed
                        </label>
                    </div>

                    <button type="submit" disabled={processing}>
                        Update Task
                    </button>
                    {' '}
                    <Link href="/tasks">Cancel</Link>
                </form>
            </div>
        </>
    );
}