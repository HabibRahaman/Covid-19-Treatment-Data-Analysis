<h4 class="secondary"><strong>Hello {{ $data['name'] }}</strong></h4>
<p>We have sent you this email in response to your request to reset your password on Bangladesh Tourism Guide.</p>

<p>Click The Button For Reset Your Account Password</p>

<a href="{{ route('customer.verify-email', ['id' => $data['id'], 'token' => $data['token']]) }}" target="_blank" style="background: green; color: #fff; border: 0; padding: 8px 15px; text-decoration: none;">Reset Password</a>