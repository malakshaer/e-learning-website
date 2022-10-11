import axios from "axios";

const createAnnouncements = async () => {
  try {
    const result = await axios.post(
      "http://127.0.0.1:8000/createAnnouncements"
    );
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default createAnnouncements;
