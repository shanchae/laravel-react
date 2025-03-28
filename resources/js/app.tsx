import ReactDOM from "react-dom/client";

function App() {
    return (
        <div>
            <h1>Hello from React inside Laravel!</h1>
        </div>
    );
}

const rootElement = document.getElementById("app");
if (rootElement) {
    ReactDOM.createRoot(rootElement).render(<App />);
}
