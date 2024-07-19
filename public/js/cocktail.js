const containers = document.querySelectorAll('.volume-values-container');

containers.forEach(container => {
    const buttons = container.querySelectorAll('.option-button');

    buttons[0].classList.add('active');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        });
    });
});
