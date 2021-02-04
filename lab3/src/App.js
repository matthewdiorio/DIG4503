import React from 'react';
import HomePage from './components/homepage.js';

function App() {
  const fname = 'Matthew';
  return (
    <HomePage firstName={fname} />
  );
}

export default App;
