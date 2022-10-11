import React from "react";
import "../App.css";
import Button from "./Button";
import LoginButton from "./LoginButton";
import Facebook from "../assets/facebook.svg";
import Instagram from "../assets/instagram.svg";
import Twitter from "../assets/twitter.svg";

const Footer = ({ text }) => {
  return (
    <div className="footer-container">
      <h1>Measure your Result</h1>
      <div>
        <form className="footer-form">
          <div>
            <label>Full Name:</label>
            <br></br>
            <input className="input-container" type={text}></input>
          </div>
          <div>
            <label>Email:</label>
            <br></br>
            <input className="input-container" type={text}></input>
          </div>
          <div>
            <label>Username:</label>
            <br></br>
            <input className="input-container" type={text}></input>
          </div>
          <div>
            <label>Password:</label>
            <br></br>
            <input className="input-container" type={text}></input>
          </div>
          <Button />
          <p>
            Already have an account? <LoginButton />
          </p>
        </form>
        <div>
          <ul className="social-media-accounts">
            <li>
              <a href="https://www.facebook.com/">
                <img src={Facebook} alt="facebookLogo" />
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/">
                <img src={Instagram} alt="instagramLogo" />
              </a>
            </li>
            <li>
              <a href="https://twitter.com/">
                <img src={Twitter} alt="TwitterLogo" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  );
};
export default Footer;
