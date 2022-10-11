import axios from "axios";

const logIn = async () => {
  try {
    const result = await axios.post("http://127.0.0.1:8000/logIn");
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default logIn;
