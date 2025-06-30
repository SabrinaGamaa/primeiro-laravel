<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Minha To-Do List</title>
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
        }

        h1 {
            text-align: center;
            color: #343a40;
        }

        form input[type="text"] {
            width: 75%;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ced4da;
            border-radius: 8px;
        }

        form button {
            padding: 10px 20px;
            background-color: #29a897;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        ul {
            list-style: none;
            padding: 0;
            margin-top: 30px;
        }

        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f1f3f5;
            padding: 12px 20px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        .completed {
            text-decoration: line-through;
            color: #6c757d;
        }

        .task-title-btn {
            all: unset;
            cursor: pointer;
        }

        .delete-btn {
            color: #000000;
            background: none;
            border: none;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }

        .delete-btn:hover {
            color: #a71d2a;
        }

        input[type="checkbox"] {
            transform: scale(1.3);
            cursor: pointer;
        }

        .clock {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #343a40;
            color: #fff;
            padding: 10px 16px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            font-family: monospace;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Minha Lista de Tarefas</h1>

        {{-- adicionar nova tarefa --}}
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Digite uma nova tarefa..." required maxlength="200">
            <button type="submit">Adicionar</button>
        </form>

        {{-- listar as tarefas --}}
        <ul>
            @forelse ($tasks as $task)
                <li>
                    {{-- para marcar concluido --}}
                    <form class="task-form" action="{{ route('tasks.toggle', $task) }}" method="POST">
                        @csrf
                        <input type="checkbox" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        <span class="task-title {{ $task->completed ? 'completed' : '' }}">
                            {{ $task->title }}
                        </span>
                    </form>

                    {{-- x para deletar --}}
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete-btn" type="submit">✕</button>
                    </form>
                </li>
            @empty
                <li style="justify-content: center; color: #888;">Nenhuma tarefa ainda!</li>
            @endforelse
        </ul>
    </div>


    {{-- relogio --}}
    <div class="clock" id="clock"></div>

    <script>
        function updateClock() {
            const clockElement = document.getElementById("clock");
            const now = new Date();

            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            clockElement.textContent = `${hours}:${minutes}:${seconds}`;
        }

        setInterval(updateClock, 1000);
        updateClock();
    </script>

</body>
</html>
