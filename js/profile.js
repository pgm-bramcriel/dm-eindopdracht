function showUpdateProfile () {
    const $showButton = document.querySelector('.show-update');
    const $updateForm = document.querySelector('.update-form');
    
    if ($showButton && $updateForm) {
        $showButton.addEventListener('click', (e) => {
            e.preventDefault();
            if ($updateForm.classList.contains('show-form')) {
                $updateForm.classList.remove('show-form');
            } else {
                $updateForm.classList.add('show-form');
            }
        });
    }
}

showUpdateProfile();