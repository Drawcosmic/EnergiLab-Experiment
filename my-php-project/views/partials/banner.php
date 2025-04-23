<header class="header shadow">
  <div class="container">
    <nav class="nav-buttons">
      <a href="/?page=home">Home</a>
      <a href="/?page=home2">Home2</a>
      <a href="/?page=home3">Home3</a>
      <a href="/?page=home4">Home4</a>
      <a href="/?page=home5">Home5</a>
      <a href="/?page=home6">Home6</a>
    </nav>
  </div>
</header>

<style>
  .header {
    background: linear-gradient(135deg, #f0f0f0, #d9d9d9);
    padding: 30px 0;
    color: #333;
    border: 1px solid #e3dcdc;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    text-align: center;
  }

  .nav-buttons a {
    display: inline-block;
    margin: 0 15px;
    padding: 10px 20px;
    border: 1px solid #b9b9b9;
    border-radius: 5px;
    text-decoration: none;
    color: #333;
    font-weight: 600;
    background-color: rgba(255, 255, 255, 0.8);
    transition: all 0.3s ease-in-out;
  }

  .nav-buttons a:hover {
    background-color: #d0d0d0;
    color: #333;
    border: 1px solid #e3dcdc;
  }

  @media (max-width: 768px) {
    .nav-buttons a {
      margin: 5px;
      padding: 8px 15px;
      font-size: 0.9rem;
    }
  }
</style>