let currentPage = 1;
const booksPerPage = 10; // Adjust as needed

async function fetchFreeBooks(page = 1) {
    const url = `https://openlibrary.org/search.json?q=fiction&has_fulltext=true&page=${page}&limit=${booksPerPage}`;

    try {
        const response = await fetch(url);
        if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);

        const data = await response.json();
        console.log("API Response:", data); // Debugging

        const books = data.docs;
        const bookList = document.getElementById("book-list");

        if (!bookList) {
            console.error("Error: book-list container not found.");
            return;
        }

        bookList.innerHTML = ''; // Clear previous books

        if (!books.length) {
            bookList.innerHTML = "<p>No books found. Try a different search.</p>";
            return;
        }

        books.forEach(book => {
            const bookElement = document.createElement("div");
            bookElement.classList.add("book");

            const coverImage = book.cover_i
                ? `https://covers.openlibrary.org/b/id/${book.cover_i}-M.jpg`
                : "https://via.placeholder.com/150";

            bookElement.innerHTML = `
                <img src="${coverImage}" alt="${book.title}">
                <div class="book-title">${book.title || "No Title Available"}</div>
                <div class="book-author">${book.author_name ? book.author_name.join(", ") : "Unknown Author"}</div>
                <a href="https://openlibrary.org${book.key}" target="_blank">Read Now</a>
            `;

            bookList.appendChild(bookElement);
        });

        // Update Pagination Buttons
        document.getElementById("pageNumber").textContent = `Page ${page}`;
        document.getElementById("prevBtn").disabled = page === 1;
        document.getElementById("nextBtn").disabled = books.length < booksPerPage;

    } catch (error) {
        console.error("Error fetching books:", error);
        document.getElementById("book-list").innerHTML = `<p style="color: red;">Failed to load books. Please try again later.</p>`;
    }
}

// Pagination Buttons
document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("prevBtn").addEventListener("click", () => {
        if (currentPage > 1) {
            currentPage--;
            fetchFreeBooks(currentPage);
        }
    });

    document.getElementById("nextBtn").addEventListener("click", () => {
        currentPage++;
        fetchFreeBooks(currentPage);
    });

    fetchFreeBooks(); // Load first page on page load
});
