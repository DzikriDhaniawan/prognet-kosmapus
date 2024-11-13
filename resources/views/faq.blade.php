<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="https://upload.wikimedia.org/wikipedia/commons/6/6f/Emoji_u2b50.svg">

  <link rel="stylesheet" type="text/css" href="{{asset('css/faq.css')}}">
  <title>KosMaPus | FAQ </title>
</head>
<body>
  <main>
    <div id="card">
      <div id="card-header">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616490.png" alt="Star Icon">
        <h1>FAQ KosMaPus</h1>
      </div>
      <div id="card-content">
        <div class="card-item">
          <div class="card-item-btn button">
            What is Frontend Mentor, and how will it help me?
            <div class="icons">
              <img class="plus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="Plus Icon">
              <img class="minus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828899.png" alt="Minus Icon">
            </div>
          </div>
          <div class="card-item-description">
            <p>
              Frontend Mentor offers realistic coding challenges to help developers improve their 
              frontend coding skills with projects in HTML, CSS, and JavaScript. It's suitable for 
              all levels and ideal for portfolio building.
            </p>
          </div>
        </div>
        <div class="card-item">
          <div class="card-item-btn button">
            Is Frontend Mentor free?
            <div class="icons">
              <img class="plus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="Plus Icon">
              <img class="minus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828899.png" alt="Minus Icon">
            </div>
          </div>
          <div class="card-item-description">
            <p>
              Yes, Frontend Mentor offers both free and premium coding challenges, with the free 
              option providing access to a range of projects suitable for all skill levels.
            </p>
          </div>
        </div>
        <div class="card-item">
          <div class="card-item-btn button">
            Can I use Frontend Mentor projects in my portfolio?
            <div class="icons">
              <img class="plus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="Plus Icon">
              <img class="minus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828899.png" alt="Minus Icon">
            </div>
          </div>
          <div class="card-item-description">
            <p>
              Yes, you can use projects completed on Frontend Mentor in your portfolio. It's an excellent
              way to showcase your skills to potential employers!
            </p>
          </div>
        </div>
        <div class="card-item">
          <div class="card-item-btn button">
            How can I get help if I'm stuck on a Frontend Mentor challenge?
            <div class="icons">
              <img class="plus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="Plus Icon">
              <img class="minus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828899.png" alt="Minus Icon">
            </div>
          </div>
          <div class="card-item-description">
            <p>
              The best place to get help is inside Frontend Mentor's Discord community. There's a help 
              channel where you can ask questions and seek support from other community members.
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
  <title>KosMaPus | FAQ</title>
</head>
<body>
  <main>
    <div id="card">
      <div id="card-header">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616490.png" alt="Star Icon">
        <h1>FAQ KosMaPus</h1>
      </div>

      <div id="card-content">
  @if(isset($faqs) && count($faqs) > 0)
    @foreach ($faqs as $faq)
        <div class="card-item">
            <div class="card-item-btn button">
                {{ $faq->question }}
            </div>
        </div>
    @endforeach
  @else
    <p id="no-faq-message">No FAQs available.</p>
  @endif
</div>


      <!-- Form Tambah Pertanyaan -->
      <div id="question-form">
        <h2>Tambahkan Pertanyaan</h2>
        <form id="question-form" method="POST" action="/faq/store">
    @csrf
    <input type="text" name="question" id="question" placeholder="Masukkan pertanyaan">
    <button type="submit">Kirim</button>
</form>

        <div id="response-message"></div>
      </div>
    </div>
  </main>
</body>
</html>

</html>

<script src="{{asset('Js/faq.js')}}"></script>

<script>
  document.getElementById('question-form').addEventListener('submit', function(e) {
    e.preventDefault(); 

    const questionInput = document.getElementById('question');
    const question = questionInput.value;
    const responseMessage = document.getElementById('response-message');

    fetch('/faq/store', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ question: question })
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        responseMessage.innerText = data.success;
        responseMessage.style.color = 'green';

        const newFaq = document.createElement('div');
        newFaq.className = 'card-item';
        newFaq.innerHTML = `
          <div class="card-item-btn button">
            ${question}
          </div>
        `;

        const cardContent = document.getElementById('card-content');
        const noFaqMessage = document.getElementById('no-faq-message');

        // Hapus pesan "No FAQs available" jika ada
        if (noFaqMessage) {
          noFaqMessage.remove();
        }

        // Tambahkan pertanyaan baru ke bagian akhir dari card-content
        cardContent.appendChild(newFaq);

        // Kosongkan input setelah menambahkan pertanyaan
        questionInput.value = '';
      } else {
        responseMessage.innerText = 'Gagal menambahkan pertanyaan.';
        responseMessage.style.color = 'red';
      }
    })
    .catch(error => {
      responseMessage.innerText = 'Terjadi kesalahan. Silakan coba lagi.';
      responseMessage.style.color = 'red';
      console.error('Error:', error);
    });
  });
</script>
