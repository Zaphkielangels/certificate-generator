import React from 'react';
import './styles.css';

const Login = () => {
  return (
    <div className="login-container">
      <div className="login-content">
        <h2>Certificate Generator</h2>
        <p>Blockchain-based</p>
        <form className="login-form" action="login.php" method="post">
          <input type="text" name="username" placeholder="Username or Email" required />
          <input type="password" name="password" placeholder="Password" required />
          <button type="submit">Login</button>
          <a href="#">Forgot Password?</a>
        </form>
      </div>
    </div>
  );
}

export default Login;
