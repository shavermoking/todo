import React, { useEffect, useState } from 'react';
import axios from 'axios';

export default function TodoList() {
    const [todos, setTodos] = useState([]);
    const [title, setTitle] = useState('');
    const [text, setText] = useState('');

    // Загрузка туду с API
    useEffect(() => {
        fetchTodos();
    }, []);

    function fetchTodos() {
        axios.get('/api/todos')
            .then(res => setTodos(res.data))
            .catch(console.error);
    }

    // Добавление туду
    function addTodo(e) {
        e.preventDefault();
        axios.post('/api/todos', { title, text })
            .then(() => {
                setTitle('');
                setText('');
                fetchTodos();
            })
            .catch(console.error);
    }

    // Удаление туду
    function deleteTodo(id) {
        axios.delete(`/api/todos/${id}`)
            .then(() => fetchTodos())
            .catch(console.error);
    }

    return (
        <div>
            <h1>Todo List</h1>
            <form onSubmit={addTodo}>
                <input
                    value={title}
                    onChange={e => setTitle(e.target.value)}
                    placeholder="Title"
                    required
                />
                <input
                    value={text}
                    onChange={e => setText(e.target.value)}
                    placeholder="Text"
                />
                <button type="submit">Add</button>
            </form>

            <ul>
                {todos.map(todo => (
                    <li key={todo.id}>
                        <b>{todo.title}</b>: {todo.text}
                        <button onClick={() => deleteTodo(todo.id)}>Delete</button>
                    </li>
                ))}
            </ul>
        </div>
    );
}
