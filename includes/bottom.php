
 
<!--Flowbite-->  
<script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
<!--Navbar Scripts-->
<script>
    // set the target element that will be collapsed or expanded (eg. navbar menu)
const targetEl = document.getElementById('targetEl');

// optionally set a trigger element (eg. a button, hamburger icon)
const triggerEl = document.getElementById('triggerEl');

// optional options with default values and callback functions
const options = {
  triggerEl: triggerEl,
  onCollapse: () => {
      console.log('element has been collapsed')
  },
  onExpand: () => {
      console.log('element has been expanded')
  },
  onToggle: () => {
      console.log('element has been toggled')
  }
};
</script>
<!--Dark Mode scripts-->
<script>
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');


    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

        // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
        
    });
</script>
</body>
</html>