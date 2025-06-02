import React from 'react';
import { createRoot } from 'react-dom/client';

import TodoList from './Components/TodoList.jsx'; // путь к твоему компоненту

const container = document.getElementById('app');
const root = createRoot(container);

root.render(<TodoList />);
