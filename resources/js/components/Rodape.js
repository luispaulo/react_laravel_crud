import React from 'react';
import ReactDOM from 'react-dom';

function Rodape() {
    return (
        <div className="container">
                <footer>
                    <p>Rodape carregado com react</p>
                </footer>
        </div>
    );
}

export default Rodape

if (document.getElementById('root')) {
    ReactDOM.render(<Rodape />, document.getElementById('root'));
}
