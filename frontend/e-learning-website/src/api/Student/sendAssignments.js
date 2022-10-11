import axios from "axios";

const sendAssignments = async () => {
  try {
    const result = await axios.get("http://127.0.0.1:8000/sendAssignments");
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default sendAssignments;
