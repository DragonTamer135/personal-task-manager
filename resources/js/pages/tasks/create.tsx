import { Head, Link, useForm } from '@inertiajs/react';
import { FormEvent } from 'react';

export default function Create() {
    const { data, setData, post, processing, errors } = useForm({
        title: '',
        description: '',
    });

    const handleSubmit = (e: FormEvent) => {
        e.preventDefault();
        post('/tasks');
    };

    return (
        <>
            <Head title="Add Task" />
            <div style={{ padding: '2rem', maxWidth: '600px', margin: '0 auto' }}>
                <h1>Add Task</h1>

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

                    <button type="submit" disabled={processing}>
                        Save Task
                    </button>
                    {' '}
                    <Link href="/tasks">Cancel</Link>
                </form>
            </div>
        </>
    );
}