
function showUpdateProfile () {
    const $showButton = document.querySelector('.show-update');
    const $updateForm = document.querySelector('.update-form');
    const $updateCommentButton = document.querySelector('.update-comments-button');
    const $updateComments = document.querySelector('.update-comments');
    
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

    if ($updateCommentButton && $updateComments) {
        $updateCommentButton.addEventListener('click', (e) => {
            e.preventDefault();
            if ($updateComments.classList.contains('show-update-comment')) {
                $updateComments.classList.remove('show-update-comment');
            } else {
                $updateComments.classList.add('show-update-comment');
            }
        });
    }
}

showUpdateProfile();