const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const Subscriber = require('./models/Subscriber');

const app = express();
const PORT = 3000;

// Middleware
app.use(bodyParser.json());

// MongoDB Connection
mongoose.connect('mongodb://localhost:27017/newsdb', {
  useNewUrlParser: true,
  useUnifiedTopology: true
}).then(() => {
  console.log('MongoDB connected');
}).catch(err => {
  console.error('MongoDB connection error:', err);
});

// Subscribe route
app.post('/subscribe', async (req, res) => {
  const { email } = req.body;

  try {
    // Check if already subscribed
    const existing = await Subscriber.findOne({ email });
    if (existing) {
      return res.status(400).json({ message: 'You are already subscribed!' });
    }

    const newSubscriber = new Subscriber({ email });
    await newSubscriber.save();

    res.status(201).json({ message: 'Subscribed successfully!' });
  } catch (err) {
    console.error(err);
    res.status(500).json({ message: 'Something went wrong' });
  }
});

// Start server
app.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}`);
});
