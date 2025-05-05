// Select the modal overlay
const modalOverlay = document.getElementById('modal-overlay');

// Select ALL pay buttons (Paypal and Credit/Debit)
const openModalBtns = document.querySelectorAll('.pay-btn');

// Select the close button inside the modal
const closeModalBtn = document.getElementById('close-modal-btn');

// Add click event to all payment buttons
openModalBtns.forEach(button => {
    button.addEventListener('click', () => {
        modalOverlay.classList.remove('hidden');
    });
});

// Close the modal when clicking "Continue Shopping!"
closeModalBtn.addEventListener('click', () => {
    modalOverlay.classList.add('hidden');
});

// Close the modal when clicking outside the modal container
modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
        modalOverlay.classList.add('hidden');
    }
});
