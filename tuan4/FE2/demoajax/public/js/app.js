const btnLike = document.querySelector('.btn-like');

btnLike.addEventListener('click', function () {
    const postId = this.dataset.postid;
    like(postId);
});

async function like(postId) {
    // 1
    const url = 'app/api/like.php';
    const data = { id: postId };
    // 2
    const response = await fetch(url, {
        method: 'POST',
        body: JSON.stringify(data)
    });

    // 3 Ket qua + xu ly giao dien
    const result = await response.json();
    const postLikes = document.querySelector('.post-likes');
    postLikes.textContent  = result.likes;
}