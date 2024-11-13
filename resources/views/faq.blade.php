<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="https://upload.wikimedia.org/wikipedia/commons/6/6f/Emoji_u2b50.svg">
  <link rel="stylesheet" type="text/css" href="{{asset('css/faq.css')}}">
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
        <div class="card-item">
          <div class="card-item-btn button">
            Bagaimana cara mencari kos??
            <div class="icons">
              <img class="plus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="Plus Icon">
              <img class="minus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828899.png" alt="Minus Icon">
            </div>
          </div>
          <div class="card-item-description">
            <p>
            Cukup masukkan lokasi atau 
            kampus terdekat, lalu pilih kos yang sesuai dengan kebutuhanmu. 
            </p>
          </div>
        </div>
        <div class="card-item">
          <div class="card-item-btn button">
          Apakah saya bisa langsung booking kos di website? 
            <div class="icons">
              <img class="plus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="Plus Icon">
              <img class="minus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828899.png" alt="Minus Icon">
            </div>
          </div>
          <div class="card-item-description">
            <p>
            Tidak, setelah memilih kos, 
            kamu bisa langsung menghubungi pemilik melalui Whatsapp. 
            </p>
          </div>
        </div>
        <div class="card-item">
          <div class="card-item-btn button">
          Apakah pendaftaran akun 
          diperlukan untuk mencari kos? 
            <div class="icons">
              <img class="plus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="Plus Icon">
              <img class="minus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828899.png" alt="Minus Icon">
            </div>
          </div>
          <div class="card-item-description">
            <p>
            Tidak, kamu bisa mencari kos 
            tanpa mendaftar. Namun, diperlukan untuk tahap pemesanan selanjutnya. 
            </p>
          </div>
        </div>
        <div class="card-item">
          <div class="card-item-btn button">
          Bagaimana cara melihat kos 
          yang tersedia di dekat kampus?
            <div class="icons">
              <img class="plus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="Plus Icon">
              <img class="minus-icon btn-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828899.png" alt="Minus Icon">
            </div>
          </div>
          <div class="card-item-description">
            <p>
            Gunakan fitur pencarian 
             dengan memasukkan nama kampus atau area sekitar untuk melihat 
            kos terdekat. 
            </p>
          </div>
        </div>
      </div>
    </div>

    <div id="card">
      <div id="card-header">
        <img src="https://cdn-icons-png.flaticon.com/512/616/616490.png" alt="Star Icon">
        <h1>Pertanyaan</h1>
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
        <form id="add-question-form" method="POST" action="/faq/store">
          @csrf
          <input type="text" name="question" id="question" placeholder="Masukkan pertanyaan" required>
          <button type="submit">Kirim</button>
        </form>
        <div id="response-message"></div>
      </div>
    </div>
  </main>

  <script src="{{asset('Js/faq.js')}}"></script>
  <script>
    document.getElementById('add-question-form').addEventListener('submit', function(e) {
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
            <div class="card-item-btn button t">
              ${question}
            </div>
          `;

          window.location.reload();

          const cardContent = document.getElementById('card-content');
          const noFaqMessage = document.getElementById('no-faq-message');

          // Remove the "No FAQs available" message if it exists
          if (noFaqMessage) {
            noFaqMessage.remove();
          }

          // Append the new question to the end of the card-content
          cardContent.appendChild(newFaq);

          // Clear the input after adding the question
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

<script src="{{asset('Js/faq.js')}}"></script>
<!-- 
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
</script> -->
