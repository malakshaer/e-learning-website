import React from "react";
import LoginButton from "../components/LoginButton";
import Button from "../components/Button";

const SignIn = ({ text }) => {
  return (
    <div className="sign-in-section">
      <h1>LearningMS</h1>
      <h2>Log in to your online training</h2>
      <form className="sign-in-form">
        <div>
          <label>EMAIL:</label>
          <br></br>
          <input
            className="input-container"
            type={text}
            placeholder="Enter your Email"
          ></input>
        </div>
        <div>
          <label>PASSWORD:</label>
          <br></br>
          <input
            className="input-container"
            type={text}
            placeholder="Enter your password"
          ></input>
        </div>
        <LoginButton />
      </form>
      <p>
        Don't have an account? <Button /> for free!
      </p>
    </div>
  );
};

export default SignIn;
