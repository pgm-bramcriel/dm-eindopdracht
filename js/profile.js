
function showUpdateProfile () {
    const $showButton = document.querySelector('.show-update');
    const $updateForm = document.querySelector('.update-form');
    // const $updateCommentButton = document.querySelector('.update-comments-button');
    // const $updateComments = document.querySelector('.update-comments');
    const $adminUserButton = document.querySelector('.admin-user-button');
    const $adminBrandButton = document.querySelector('.admin-brand-button');
    const $adminUser = document.querySelector('.admin-user');
    const $brandUser = document.querySelector('.brand-user');

    
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

    // if ($updateCommentButton && $updateComments) {
    //     $updateCommentButton.addEventListener('click', (e) => {
    //         e.preventDefault();
    //         if ($updateComments.classList.contains('show-update-comment')) {
    //             $updateComments.classList.remove('show-update-comment');
    //         } else {
    //             $updateComments.classList.add('show-update-comment');
    //         }
    //     });
    // }

    if ($adminUserButton && $adminUser) {
        $adminUserButton.addEventListener('click', (e) => {
            e.preventDefault();
            if ($adminUser.classList.contains('show-manage')) {
                $adminUser.classList.remove('show-manage');
            } else {
                $adminUser.classList.add('show-manage');
            }
        });
    }

    if ($adminBrandButton && $brandUser) {
        $adminBrandButton.addEventListener('click', (e) => {
            e.preventDefault();
            if ($brandUser.classList.contains('show-manage')) {
                $brandUser.classList.remove('show-manage');
            } else {
                $brandUser.classList.add('show-manage');
            }
        });
    }
}

showUpdateProfile();