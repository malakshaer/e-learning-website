import axios from "axios";

const register = async () => {
  try {
    const result = await axios.post("http://127.0.0.1:8000/register");
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default register;
