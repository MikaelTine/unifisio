import Head from 'next/head'; 

export default function Home() {

    const [data, setData] = useState({
        name: '',
        cpf: ''
    });

    const valorInput = e => setData({...data, [e.target.name]: e.target.value})

    const sendMsg = (e) => {

        console.log(`Nome: ${data.name}`);

    }

    return (
        <>
            <Head>
                <title>Formulario</title>
                <meta name="description" content="Unifisio" />
                <meta nome="viewport" content="widh=device-width, initial-scale=1" />
            </Head>
            <main>

                <h2>FORMULARIO</h2>

                <form onSubmit={sendMsg}>

                    <label>Nome: </label>
                    <input type="text" name="name" placeholder='Digite o nome' onChange={valorInput} required/><br /> <br />

                    <label>CPF: </label>
                    <input type="number" name="cpf" placeholder='Digite o CPF' onChange={valorInput} required/><br /> <br />

                    <button type="submit">Enviar</button><br /><br />
                </form> 
            </main>             
        </>
   )
}