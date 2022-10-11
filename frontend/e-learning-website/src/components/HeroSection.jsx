import React from "react";
import "../App.css";
import Button from "./Button";
import heroImg from "../assets/hero-img.png";

const HeroSection = () => {
  return (
    <div className="hero-section">
      <div className="hero-left-section">
        <h2>
          For training to succeed, you need the best online learning platform
        </h2>
        <p>Learning comes with all the tools you need, ready to go?</p>
        <Button />
      </div>
      <div>
        <img src={heroImg} alt="heroImg" />
      </div>
    </div>
  );
};
export default HeroSection;
