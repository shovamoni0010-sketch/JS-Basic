$(document).ready(function () {
  const form = $('#userForm');
  const table = $('#userTable');  
  const tableBody = $('#userTable tBody');
  const submitBtn = $('#submitBtn');

  let editRow = null;
  let users = JSON.parse(localStorage.getItem('users')) || [];

  function renderTable() {
    tableBody.empty();
    users.forEach(user => {
      const row = $(`
        <tr>
          <td>${user.id}</td>
          <td>${user.name}</td>
          <td>${user.email}</td>
          <td>${user.phone}</td>
          <td>
            <button class="editBtn">Edit</button>
            <button class="deleteBtn">Delete</button>
          </td>
        </tr>
      `);
      tableBody.append(row);
    });
  }
  renderTable();

  function saveToLocal() {
    localStorage.setItem('users', JSON.stringify(users));
  }

  form.on('submit', function (e) {
    e.preventDefault();

    const id = $('#id').val();
    const name = $('#name').val();
    const email = $('#email').val();
    const phone = $('#phone').val();

    if (!id || !name || !email || !phone) {
      alert('Please fill all fields!');
      return;
    }
    if (editRow) {
      const index = editRow.index();
      users[index] = { id, name, email, phone };

      submitBtn.text(' + Add user');
      editRow = null;
    } else {
      users.push({ id, name, email, phone });
    }
    saveToLocal();
    renderTable();
    form[0].reset();
  });

  table.on('click', '.deleteBtn', function () {
    const row = $(this).closest('tr');
    const index = row.index();

    users.splice(index, 1);
    saveToLocal();
    renderTable();
  });

  table.on('click', '.editBtn', function () {
    editRow = $(this).closest('tr');
    const index = editRow.index();
    const user = users[index];

    $('#id').val(user.id);
    $('#name').val(user.name);
    $('#email').val(user.email);
    $('#phone').val(user.phone);

    submitBtn.text('Update User');
  });
});
