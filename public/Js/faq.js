const buttons = document.querySelectorAll(".card-item-btn");

buttons.forEach(button => {
    button.addEventListener("click", function () {
        this.classList.toggle("active");
        const descriptions = this.nextElementSibling;
        const plusIcons = this.querySelector(".plus-icon");
        const minusIcons = this.querySelector(".minus-icon");

        if(descriptions.style.maxHeight){
            descriptions.style.maxHeight = null;
            plusIcons.style.display = "block";
            minusIcons.style.display = "none";
        }else{
            descriptions.style.maxHeight = descriptions.scrollHeight + 'px';
            plusIcons.style.display = 'none';
            minusIcons.style.display = 'block';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const faqForm = document.getElementById('faqForm');
    const questionInput = document.getElementById('question');
    const responseMessage = document.getElementById('response-message');
  
    faqForm.addEventListener('submit', async function(event) {
      event.preventDefault();
  
      const question = questionInput.value.trim();
      if (!question) return;
  
      try {
        const response = await fetch('/faq/store', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({ question })
        });
  
        const result = await response.json();
  
        if (result.success) {
          responseMessage.textContent = result.success;
          questionInput.value = '';
          loadFaqs();
        }
      } catch (error) {
        console.error('Error:', error);
      }
    });
  
    async function loadFaqs() {
      const response = await fetch('/faq/list');
      const faqs = await response.json();
      const cardContent = document.getElementById('card-content');
      cardContent.innerHTML = '';
  
      faqs.forEach(faq => {
        const item = document.createElement('div');
        item.className = 'card-item';
        item.innerHTML = `
          <div class="card-item-btn button">
            ${faq.question}
            <div class="icons">
              <img class="plus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png">
              <img class="minus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828899.png">
            </div>
          </div>
        `;
        cardContent.appendChild(item);
      });
    }
  
    loadFaqs();
  });
  