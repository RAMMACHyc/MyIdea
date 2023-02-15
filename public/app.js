let comment_button = document.querySelector('#comment');
let comment_section = document.querySelector('.comment_section');

comment_button.addEventListener('click', function() {
    comment_section.style.display = 'block';
});