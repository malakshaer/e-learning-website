import React from "react";
import "../App.css";
import AddButton from "./AddButton";

const InstructPage = ({ text }) => {
  return (
    <div className="Admin-container">
      <form>
        <h3>Add Assignment</h3>
        <input type={text} placeholder="Subject"></input>
        <input type={text} placeholder="Assignment text"></input>
        <AddButton />
      </form>
    </div>
  );
};

export default InstructPage;
