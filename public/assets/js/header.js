function openSidebar(choice) {
        if(choice==='hamburg'){
            let sidebar = document.getElementById('sidebar');
            sidebar.style.display = 'block'; 
            setTimeout(function() {
                sidebar.classList.add('open');
                sidebar.classList.remove('close');
            }, 10);
        }
        else if(choice==='cart'){
            let cart = document.getElementById('cart')
            cart.style.display ='block';
            setTimeout(function() {
                cart.classList.add('open');
                cart.classList.remove('close');
            }, 10);
        }
            
    }
function closeSidebar(choice){
    if (choice==='hamburg'){
        let sidebar = document.getElementById('sidebar');
        sidebar.classList.add('close');
        setTimeout(function() {
            sidebar.style.display = 'none';
        }, 750);
    }
    else if(choice==='cart'){
        let cart = document.getElementById('cart');
        cart.classList.add('close');
        setTimeout(function() {
            cart.style.display = 'none';
        }, 750);
    }
}
let isEditing = false;

function toggleEdit() {
    const username = document.querySelector(".sidebar-user-id");
    const editBtn = document.querySelector(".sidebar-edit-btn");

    if (!isEditing) {
        username.contentEditable = "true";
        username.focus();
        editBtn.innerText = "Save";
    } else {
        username.contentEditable = "false";
        editBtn.innerHTML = '<img src="/pic/sidebar-pics/edit.png" alt="Edit icon">';
        }

    isEditing = !isEditing;
    }
let isMasked = false;

function toggleMask(a) {
    if(a==='email'){
        const emailEl = document.querySelector('.sidebar-user-email');
        if (!emailEl.dataset.original) {
            emailEl.dataset.original = emailEl.textContent.trim();
        }
        if (isMasked) {
            emailEl.textContent = emailEl.dataset.original;
        } else {
            emailEl.textContent = '*'.repeat(emailEl.dataset.original.length);
            
        }
    
        isMasked = !isMasked;
    }
    else if(a==='contact'){
        const contactEl = document.querySelector('.sidebar-user-contact');
        if (!contactEl.dataset.original) {
            contactEl.dataset.original = contactEl.textContent.trim();
        }
        if (!contactEl.dataset.original) {
            contactEl.dataset.original = contactEl.textContent.trim();
        }
    
        if (isMasked) {
            contactEl.textContent = contactEl.dataset.original;
        } else {
            contactEl.textContent = '*'.repeat(contactEl.dataset.original.length);
        }
    
        isMasked = !isMasked;

    }
    
    

    
}

function dropDown() {
    let content = document.querySelector('.sidebar-dropdown-content-men');
    let arrow = document.querySelector('.dropdown-arrow');

    if (content.classList.contains('open')) {
        content.classList.remove('open');
        content.style.display = '';
        arrow.style.rotate = '';
    } else {
        content.classList.add('open');
        content.style.display = 'flex';
        arrow.style.rotate = '90deg';
    }
}

    
