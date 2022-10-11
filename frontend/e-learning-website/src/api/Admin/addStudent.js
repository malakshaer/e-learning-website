import axios from "axios";

const addStudent = async () => {
  try {
    const result = await axios.post("http://127.0.0.1:8000/addStudent");
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default addStudent;
