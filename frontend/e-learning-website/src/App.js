import "./App.css";
import Home from "./pages/Home";
import SignIn from "./pages/SignIn";
import Admins from "./pages/Admins";
import Instructors from "./pages/Instructors";
import Students from "./pages/Students";
import { BrowserRouter, Routes, Route } from "react-router-dom";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/Home" element={<Home />} />
        <Route path="/SignIn" element={<SignIn />} />
        <Route path="/Admins/*" element={<Admins />} />
        <Route path="/Instructors/*" element={<Instructors />} />
        <Route path="/Students/*" element={<Students />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
