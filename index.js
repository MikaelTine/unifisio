import Head from 'next/head'; 

export default function Home() {
    return (
        <>
            <Head>
                <title>Formulario</title>
                <meta name="description" content="Unifisio" />
                <meta nome="viewport" content="widh=device-width, initial-scale=1" />
            </Head>
            <main>
                <form>
                    <label>Nome: </label>
                    <input type="text" name="name" placeholder='Digite o nome' /><br /> <br />

                    <label>CPF: </label>
                    <input type="number" name="cpf" placeholder='Digite o CPF' /><br /> <br />
                </form> 
            </main>             
        </>
   )
}