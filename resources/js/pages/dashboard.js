const sidebar = document.getElementById('sidebar');
const openBtn = document.getElementById('openSidebar');
const closeBtn = document.getElementById('closeSidebar');

// Buksan ang sidebar sa mobile
openBtn.addEventListener('click', () => {
    sidebar.classList.add('active');
});

// Isara ang sidebar sa mobile
closeBtn.addEventListener('click', () => {
    sidebar.classList.remove('active');
});

// Isara ang sidebar kapag nag-click sa labas (mobile user experience)
document.addEventListener('mousedown', (e) => {
    if (window.innerWidth <= 768) {
        if (!sidebar.contains(e.target) && !openBtn.contains(e.target)) {
            sidebar.classList.remove('active');
        }
    }
});
