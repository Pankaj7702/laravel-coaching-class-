// scripts.js

// Add any JavaScript specific to the header here
// For example, you might want to add some interactive features

// Example: Highlight the current page link in the navigation
const currentLocation = window.location.href;
const navLinks = document.querySelectorAll('nav ul li a');
navLinks.forEach(link => {
    if (link.href === currentLocation) {
        link.classList.add('active');
    }
});


const body = document.querySelector("body");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector(".menu-btn");
const cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = () => {
  navbar.classList.add("show");
  menuBtn.classList.add("hide");
  body.classList.add("disabled");
}
cancelBtn.onclick = () => {
  body.classList.remove("disabled");
  navbar.classList.remove("show");
  menuBtn.classList.remove("hide");
}
window.onscroll = () => {
  this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
}

function addRow() {
  const table = document.getElementById('courseTable');
  const row = document.createElement('tr');
  row.innerHTML = `
      <td><input type="text" class="form-control" placeholder="Course Name"></td>
      <td><input type="number" class="form-control" placeholder="Fees"></td>
      <td><input type="text" class="form-control" placeholder="Durations"></td>
      <td>
          <button class="btn btn-primary" onclick="deleteRow(this)">ADD</button>
      </td>
  `;
  table.appendChild(row);
}

function deleteRow(button) {
  const row = button.parentNode.parentNode;
  row.parentNode.removeChild(row);
}
