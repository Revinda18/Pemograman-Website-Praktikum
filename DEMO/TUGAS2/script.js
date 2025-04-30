const taskInput = document.getElementById('taskInput');
        const addTaskBtn = document.getElementById('addTaskBtn');
        const taskList = document.getElementById('taskList');
        let editIndex = -1;

        addTaskBtn.addEventListener('click', () => {
            const taskText = taskInput.value.trim();
            if (taskText === '') {
                alert('Tugas tidak boleh kosong!');
                return;
            }

            if (editIndex === -1) {
                addTask(taskText);
            } else {
                updateTask(taskText);
            }

            taskInput.value = '';
        });

        function addTask(taskText) {
            const li = document.createElement('li');
            li.textContent = taskText;

            const editBtn = document.createElement('button');
            editBtn.textContent = 'Edit';
            editBtn.onclick = () => {
                taskInput.value = taskText;
                editIndex = Array.from(taskList.children).indexOf(li);
                li.classList.add('editMode');
            };

            const deleteBtn = document.createElement('button');
            deleteBtn.textContent = 'Hapus';
            deleteBtn.onclick = () => {
                taskList.removeChild(li);
                editIndex = -1; // Reset edit index if task is deleted
            };

            li.appendChild(editBtn);
            li.appendChild(deleteBtn);
            taskList.appendChild(li);
        }

        function updateTask(taskText) {
            const li = taskList.children[editIndex];
            li.firstChild.textContent = taskText;
            editIndex = -1; // Reset edit index after updating
        }
