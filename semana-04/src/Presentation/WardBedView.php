<?php

namespace MicroHis\Presentation;

final class WardBedView
{
    public static function render(?array $result = null): string
    {
        $message = '';

        if ($result !== null) {
            $class = ($result['success'] ?? false)
                ? 'success'
                : 'error';

            $text = self::escape(
                $result['message'] ?? 'Operación procesada.'
            );

            $message = <<<HTML
                <div class="message {$class}">
                    {$text}
                </div>
            HTML;
        }

        return <<<HTML
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1.0"
            >

            <title>Micro-HIS - Catálogo de salas y camas</title>

            <style>
                body {
                    font-family: Arial, sans-serif;
                    max-width: 760px;
                    margin: 40px auto;
                    padding: 0 20px;
                    background: #f5f5f5;
                }

                main {
                    background: white;
                    padding: 30px;
                }

                h1 {
                    margin-top: 0;
                }

                fieldset {
                    margin-bottom: 25px;
                    border: 1px solid #ccc;
                    padding: 20px;
                }

                label {
                    display: block;
                    margin-top: 12px;
                    margin-bottom: 5px;
                    font-weight: bold;
                }

                input,
                select,
                textarea {
                    width: 100%;
                    padding: 9px;
                    box-sizing: border-box;
                }

                button {
                    margin-top: 15px;
                    padding: 10px 18px;
                    cursor: pointer;
                }

                .message {
                    padding: 12px;
                    margin-bottom: 20px;
                }

                .success {
                    border: 1px solid #198754;
                }

                .error {
                    border: 1px solid #dc3545;
                }
            </style>
        </head>

        <body>
            <main>
                <h1>Catálogo de salas, wards y camas</h1>

                <p>
                    Creación de sala y cama con control
                    de estado operativo.
                </p>

                {$message}

                <form method="POST">
                    <fieldset>
                        <legend>Sala / Ward</legend>

                        <label for="ward_name">
                            Nombre
                        </label>

                        <input
                            id="ward_name"
                            name="ward_name"
                            type="text"
                            required
                        >

                        <label for="floor">
                            Piso
                        </label>

                        <input
                            id="floor"
                            name="floor"
                            type="text"
                        >

                        <label for="building">
                            Edificio
                        </label>

                        <input
                            id="building"
                            name="building"
                            type="text"
                        >
                    </fieldset>

                    <fieldset>
                        <legend>Cama</legend>

                        <label for="bed_code">
                            Código
                        </label>

                        <input
                            id="bed_code"
                            name="bed_code"
                            type="text"
                            required
                        >

                        <label for="bed_status">
                            Estado operativo
                        </label>

                        <select
                            id="bed_status"
                            name="bed_status"
                            required
                        >
                            <option value="disponible">
                                Disponible
                            </option>

                            <option value="ocupada">
                                Ocupada
                            </option>

                            <option value="limpieza">
                                Limpieza
                            </option>

                            <option value="mantenimiento">
                                Mantenimiento
                            </option>
                        </select>

                        <label for="notes">
                            Notas
                        </label>

                        <textarea
                            id="notes"
                            name="notes"
                            rows="3"
                        ></textarea>
                    </fieldset>

                    <button type="submit">
                        Registrar sala y cama
                    </button>
                </form>
            </main>
        </body>
        </html>
        HTML;
    }

    private static function escape(string $value): string
    {
        return htmlspecialchars(
            $value,
            ENT_QUOTES,
            'UTF-8'
        );
    }
}