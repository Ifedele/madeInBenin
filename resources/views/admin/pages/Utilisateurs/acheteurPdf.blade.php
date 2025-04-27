<div style="overflow: hidden; border: 1px solid #ccc; border-radius: 8px; background-color: #fff; padding-top: 16px;">
    <div style="text-align: center; margin-bottom: 16px;">
        <h3 style="font-size: 1.25rem; font-weight: 600; color: #374151;">
            Liste des Acheteurs
        </h3>
    </div>

    <div style="max-width: 100%; overflow-x: auto;">
        <table style="min-width: 100%; width: 100%; border-collapse: collapse; border: 1px solid #ccc;">
            <thead style="background-color: #f3f4f6;">
                <tr>
                    <th style="padding: 8px; font-weight: 500; color: #4b5563; border: 1px solid #ccc;">
                        Nom
                    </th>
                    <th style="padding: 8px; font-weight: 500; color: #4b5563; border: 1px solid #ccc;">
                        Prénom
                    </th>
                    <th style="padding: 8px; font-weight: 500; color: #4b5563; border: 1px solid #ccc;">
                        Ville
                    </th>
                     <th style="padding: 8px; font-weight: 500; color: #4b5563; border: 1px solid #ccc;">
                        Téléphone
                    </th>
                    <th style="padding: 8px; font-weight: 500; color: #4b5563; border: 1px solid #ccc;">
                        Email
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($acheteurs as $user)
                <tr>
                    <td style="padding: 8px; border: 1px solid #ccc;">
                        <span style="font-size: 0.875rem; color: #374151;">{{ $user->acheteur->nom ?? '-' }}</span>
                    </td>
                    <td style="padding: 8px; border: 1px solid #ccc;">
                        <span style="font-size: 0.875rem; color: #374151;">{{ $user->acheteur->prenom ?? '-' }}</span>
                    </td>
                    <td style="padding: 8px; border: 1px solid #ccc;">
                        <span style="font-size: 0.875rem; color: #374151;">{{ $user->acheteur->city->name ?? '-' }}</span>
                    </td>
                     <td style="padding: 8px; border: 1px solid #ccc;">
                        <span style="font-size: 0.875rem; color: #374151;">{{ $user->acheteur->tel ?? '-' }}</span>
                    </td>
                    <td style="padding: 8px; border: 1px solid #ccc;">
                        <span style="font-size: 0.875rem; color: #374151;">{{ $user->email }}</span>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
