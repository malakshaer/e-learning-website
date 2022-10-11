import React from "react";
import "../App.css";
import { useState, useEffect } from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import AddButton from "./AddButton";
import DeleteButton from "./DeleteButton";

const AdminPage = ({ text }) => {
  return (
    <div className="Admin-container">
      <form>
        <h3>Add Student</h3>
        <input type={text} placeholder="Student Name"></input>
        <input type={text} placeholder="Student email"></input>
        <AddButton />
        <DeleteButton />
      </form>
    </div>
  );
};

export default AdminPage;
