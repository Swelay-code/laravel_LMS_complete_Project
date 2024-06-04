//video selector
function changeVideo(button, videoUrl, title) {
    document.querySelectorAll('.select-video').forEach(function(btn) {
        btn.classList.remove('active');
    });

    button.classList.add('active');

    var videoContainer = document.querySelector('.video-container');

    videoContainer.innerHTML = `
    <video width="100%" height="auto" controls autoplay>
        <source src="${videoUrl}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    `;
}

// Dummy data for search results
const dummyData = [
  { title: "How to Recover Details from Too Dark", description: "Description of Video 1" },
  { title: "Video 2", description: "Description of Video 2" },
  { title: "Video 3", description: "Description of Video 3" },
  { title: "Video 4", description: "Description of Video 4" },
];

// Function to display search results
function displayResults(results) {
  const searchResultsElement = document.getElementById("searchResults");
  searchResultsElement.innerHTML = "";

  results.forEach(result => {
    const card = document.createElement("div");
    card.classList.add("card");
    card.innerHTML = `
      <div class="card-body">
        <h5 class="card-title">${result.title}</h5>
        <p class="card-text">${result.description}</p>
      </div>
    `;
    searchResultsElement.appendChild(card);
  });
}

// Function to handle search
function handleSearch() {
  const searchTerm = document.getElementById("searchInput").value.toLowerCase();
  const filteredResults = dummyData.filter(item => {
    return item.title.toLowerCase().includes(searchTerm) || item.description.toLowerCase().includes(searchTerm);
  });
  displayResults(filteredResults);
}

// Event listener for search button click
document.getElementById("searchButton").addEventListener("click", handleSearch);


// register form validation
function validateForm() {
  var firsrName = document.getElementById("firstName").value.trim();
  var lastName = document.getElementById("lastName").value.trim();
  var birthdayDate = document.getElementById("birthdayDate").value.trim();
  var guardianName = document.getElementById("guardianName").value.trim();
  var email = document.getElementById("email").value.trim();
  var phone = document.getElementById("phone").value.trim();
  var passportPhoto = document.getElementById("passportPhoto").value.trim();
  var course = document.getElementById("course").value;

  if (firsrName === "" || lastName === "" || birthdayDate === "" || guardianName === "" || phone === "" || passportPhoto === "" ||  course === "") {
      alert("Please fill out all fields.");
      return false;
  }

  return true;
}
// JavaScript for form validation
document.getElementById('paymentForm').addEventListener('submit', function(event) {
  event.preventDefault();
  var cardNumber = document.getElementById('cardNumber').value;
  var expiryDate = document.getElementById('expiryDate').value;
  var cvv = document.getElementById('cvv').value;

  if (cardNumber.trim() === '' || expiryDate.trim() === '' || cvv.trim() === '') {
    alert('Please fill in all fields');
    return;
  }

  // Example validation for card number (simple check for numeric input)
  if (isNaN(cardNumber)) {
    alert('Invalid card number. Please enter a valid numeric card number');
    return;
  }

  // Example validation for expiry date (simple check for MM/YY format)
  var expiryRegex = /^(0[1-9]|1[0-2])\/?([0-9]{2})$/;
  if (!expiryRegex.test(expiryDate)) {
    alert('Invalid expiry date. Please enter a valid MM/YY format');
    return;
  }

  // Example validation for CVV (simple check for numeric input)
  if (isNaN(cvv)) {
    alert('Invalid CVV. Please enter a valid numeric CVV');
    return;
  }

  // If all validations pass, you can proceed with the payment processing
  alert('Payment submitted successfully!');
  // You can add further processing logic here (e.g., sending payment details to a server)
});
